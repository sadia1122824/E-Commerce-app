 
const Signup = require('../models/signup.js'); 
const imageContainer = require('../models/imageContainer.js'); 
const Shopproduct = require('../models/shopproduct.js');
const headerFlayar = require('../models/headerflayar.js');
const Products = require('../models/products.js');
const Productsmakeup = require('../models/productmakeup.js');
const Productsjewllery = require('../models/productjewllery.js');
const Productsdress = require('../models/productdress.js');
const Productsshoes = require('../models/productshoes.js');
const Contact = require('../models/contactInfo.js');
const Orders = require('../models/orders.js');
const Blogpost = require('../models/blogpost.js');
const nodemailer = require('nodemailer');

const fastify = require('fastify');
const bcrypt = require("bcrypt");
const fs = require('fs');
const path = require('path');
const util = require('util');
const pump = util.promisify(require('stream').pipeline);



const signupPage = async(req,reply)=>{
    return reply.sendFile('admin/signUp.html');
};


const signupForm = async(req,reply)=>{
 try {
       const {name, email, password} = req.body; 
       const hashedPasword =  await bcrypt.hash(password,10)
        const response = await Signup.create({name, email, password:hashedPasword});
       console.log(response);
       if(!response){
           reply.send({message:'this credentials invalid'});
       }
       return reply.send(response);
 } catch (error) {
    reply.send(error,'this ishues in your code');
 }
}


const login = async (request, reply)=>{
    return reply.sendFile("/admin/signIn.html")
};
const loginForm = async (req, reply) => {
  try {
    const { email, password } = req.body;
    const getCredentials = await Signup.findOne({ email });

    if (!getCredentials) {
      return reply.code(401).send({ success: false, message: 'Email not found' });
    }

    const comparePassword = await bcrypt.compare(password, getCredentials.password);

    if (!comparePassword) {
      return reply.code(401).send({ success: false, message: 'Incorrect password' });
    }

     return reply.send({ success: true, message: 'Login successful' });

  } catch (error) {
    console.error('Login error:', error);
    return reply.code(500).send({ success: false, message: 'Internal server error' });
  }
};

const headerflayar = async(req,reply)=>{
      return reply.sendFile('admin/showFlayar.html');
};
const headerflayaradmin = async(req,reply)=>{
 try {
     const {headerDescription} = req.body;
     const response = await headerFlayar.create({headerDescription});
     if(!response){
        reply.send({message:'this is invalid credentials'});
     }
     return(response);
 } catch (error) {
       console.log('this is internal server ishues:', error);
 }
};
const userFlayar = async(req,reply)=>{
  return reply.sendFile('/user/homePage.html');
};
const userFlayarShow = async(req,reply)=>{
try {
    const response = await headerFlayar.findOne().sort({_id:-1});
    if(!response){
      reply.send('this is invalid credentials');
    }
    return reply.send(response);
} catch (error) {
    console.log('this is internel server error:',error);
}
};

const adminImageSection = async(req,reply)=>{
   return reply.sendFile('admin/ImageSection.html');
};



const uploadSection = async (req, reply) => {
  try {
    console.log("📥 Upload route hit");

    const parts = req.parts();
    const data = {};
    let imageurl = '';

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        // Text fields like imageText
        console.log("✏️ Field received:", part.fieldname, '=', part.value);
        data[part.fieldname] = part.value;
      } else {
        // File part (image)
        console.log("🖼️ File received:", part.filename);

        const filename = `${Date.now()}-${part.filename}`;
        const filepath = path.join(uploadDir, filename);

        // Save file to disk
        const writeStream = fs.createWriteStream(filepath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`;
      }
    }

    // Validate required fields
    if (!data.imageText || !imageurl) {
      return reply.code(400).send({
        success: false,
        message: 'Both image and description are required.'
      });
    }

    // Save to MongoDB
    const imageDoc = new imageContainer({
      filename: path.basename(imageurl),
      path: imageurl,
      imageText: data.imageText
    });

    await imageDoc.save();
    console.log("🗃️ MongoDB saved:", imageDoc._id);

    return reply.send({
      success: true,
      message: 'Upload successful!',
      file: {
        id: imageDoc._id,
        filename: imageDoc.filename,
        path: imageDoc.path,
        imageText: imageDoc.imageText
      }
    });

  } catch (error) {
    console.error("❌ Upload error:", error);
    return reply.code(500).send({ success: false, message: 'Internal Server Error' });
  }
};








const usersection = async(req,reply)=>{
    return reply.sendFile('/user/homePage.html')
};

const usersectionshow = async (req, reply) => {
  try {
    const image = await imageContainer.findOne({}).sort({ _id: -1 }); 

    if (!image) {
      return reply.code(404).send({ message: 'Image not found in DB' });
    }

    return reply.send({ image }); // 👈 Send full image object
  } catch (error) {
    console.error('Internal Server Error:', error);
    return reply.code(500).send({ message: 'Internal Server Error' });
  }
};


const adminshopimage = async(req,reply)=>{
   return reply.sendFile('admin/shopproduct.html');
}
const adminshopimageshow = async (req, reply) => {
  try {
    console.log("📥 Upload route hit");

    const parts = req.parts();
    let imageurl = '';
    let filename = '';
    let category = '';

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (part.file) {
        console.log("🖼️ File received:", part.filename);

        filename = `${Date.now()}-${part.filename}`;
        const filepath = path.join(uploadDir, filename);

        const writeStream = fs.createWriteStream(filepath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`;
      } else if (part.type === 'field' && part.fieldname === 'category') {
        category = part.value?.trim();
      }
    }

    // Validate input
    if (!imageurl || !category) {
      return reply.code(400).send({
        success: false,
        message: 'Image file and category are required.'
      });
    }

    // Optional: delete existing image of same category (overwrite)
    const oldImage = await Shopproduct.findOneAndDelete({ category });
    if (oldImage) {
      const oldPath = path.join(process.cwd(), 'public', oldImage.path);
      if (fs.existsSync(oldPath)) {
        fs.unlinkSync(oldPath);
      }
    }

    // Save new image to DB
    const imageDoc = new Shopproduct({
      filename,
      path: imageurl,
      category
    });

    await imageDoc.save();
    console.log("🗃️ MongoDB saved:", imageDoc._id);

    return reply.send({
      success: true,
      message: 'Upload successful!',
      file: {
        id: imageDoc._id,
        filename: imageDoc.filename,
        path: imageDoc.path,
        category: imageDoc.category
      }
    });

  } catch (error) {
    console.error("❌ Upload error:", error);
    return reply.code(500).send({
      success: false,
      message: 'Internal Server Error'
    });
  }
};

const usershop = async(req,reply)=>{
    return reply.sendFile('/user/homePage.html')
};
const usershopshow = async (req, reply) => {
  try {
    const categories = ['men', 'women', 'accessories'];
    const results = [];

    for (const cat of categories) {
      const latest = await Shopproduct.findOne({ category: cat }, { path: 1, category: 1, _id: 0 })
        .sort({ _id: -1 });

      if (latest) {
        results.push(latest);
      }
    }

    if (results.length === 0) {
      return reply.code(404).send({ message: 'No images found for any category' });
    }

    return reply.send(results); 

  } catch (error) {
    console.error('Internal Server Error:', error);
    return reply.code(500).send({ message: 'Internal Server Error' });
  }
};





const adminProducts = async(req,reply)=>{
   return reply.sendFile('/admin/Products.html');
};
const adminProductsshow = async (req, reply) => {
  try {
    const data = {};
    let imageurl = '';
    let filename = '';

    const parts = req.parts();

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        data[part.fieldname] = part.value;
      } else {
        // ✅ Save file to disk
        filename = `${Date.now()}-${part.filename}`;
        const filePath = path.join(uploadDir, filename);
        const writeStream = fs.createWriteStream(filePath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`; // Relative URL to use on frontend
      }
    }

    if (!imageurl || !data.productName || !data.comparePrice || !data.originalPrice || !data.sku || !data.description || !data.category) {
      return reply.code(400).send({ success: false, message: 'All fields are required.' });
    }

    const createProduct = await Products.create({
      productName: data.productName,
      comparePrice: Number(data.comparePrice),
      originalPrice: Number(data.originalPrice),
      sku: data.sku,
      description: data.description,
      category: data.category.toLowerCase(),
      imageurl,
    });

    return reply.send({
      success: true,
      message: '✅ Product saved successfully',
      product: createProduct,
    });

  } catch (error) {
    console.error('❌ Internal server error:', error);
    return reply.code(500).send({
      success: false,
      message: 'Server error while saving product',
    });
  }
};
 

// const fetchproducts = async(req,reply)=>{
//     return reply.sendFile('/admin/showProducts.html');
//  }
// const fetchproductsadmin = async(req,reply)=>{
//   try {
     
//      const image = await Products.findOne({}).sort({ _id: -1 }); 
//       if(!image){
//           reply.send('this credentials not found');
//       };
//       return reply.send(image);
//   } catch (error) {
//       console.log('interval server error',error);
//   }
// }



const deleteproduct = async (req, reply) => {
  try {
    const { id } = req.body;
      
    const deleted = await Products.findByIdAndDelete(id);

    if (!deleted) {
      return reply.send({ success: false, message: 'Invalid product ID' });
    }

    return reply.send({ success: true, message: 'Product deleted successfully' });
  } catch (error) {
    console.error(error);
    return reply.code(500).send({ success: false, message: 'Internal server error' });
  }
};

const userproducts = async(req,reply)=>{
    return reply.sendFile('/user/homePage.html');
};
const userproductsshow = async (req, reply) => {
  try {
    const categories = ['makeup', 'jewellery', 'dress', 'shoes']; // ✅ Fixed spellings
    const results = [];

    for (const cat of categories) {
      const product = await Products.findOne({ category: cat }).sort({ updatedAt: -1 });

      if (product) {
        results.push(product);
      } else {
        console.log(`⚠️ No product found for category: ${cat}`);
      }
    }

    if (results.length === 0) {
      return reply.code(404).send({ message: 'No products found' });
    }

    return reply.send({ success: true, products: results });
  } catch (error) {
    console.error('❌ internal server error', error);
    return reply.status(500).send({ message: 'Internal server error' });
  }
};





const home_page = async(req,reply)=>{
   return reply.sendFile('/user/homePage.html');
};

const blogAdmin = async(req,reply)=>{
    return reply.sendFile('/admin/create_blog.html');
}


const showAdminPost = async (req, reply) => {
  try {
    console.log("📥 Admin post upload hit");

    const parts = req.parts();
    const data = {};
    let imagePath = '';

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        console.log("✏️ Field received:", part.fieldname, '=', part.value);
        data[part.fieldname] = part.value;
      } else {
        console.log("🖼️ File received:", part.filename);
        const filename = `${Date.now()}-${part.filename}`;
        const filepath = path.join(uploadDir, filename);
        const writeStream = fs.createWriteStream(filepath);
        await pump(part.file, writeStream);

        imagePath = `/uploads/${filename}`;
      }
    }

    // Validate
    if (!data.date || !data.description || !imagePath) {
      return reply.code(400).send({
        success: false,
        message: 'Date, description, and image are required'
      });
    }

    const newPost = new Blogpost({
      date: data.date,
      description: data.description,
      imagePath
    });

    await newPost.save();
    console.log("🗃️ Blogpost saved:", newPost._id);

    return reply.send({
      success: true,
      message: 'Post saved successfully',
      imageUrl: imagePath,
    });

  } catch (err) {
    console.error('❌ Error saving post:', err);
    return reply.code(500).send({ success: false, message: 'Internal server error' });
  }
};

const blog_page = async(req,reply)=>{
   return reply.sendFile('/user/blog_page.html');
};

const getAllBlogPosts = async (req, reply) => {
  try {
    const posts = await Blogpost.find().sort({ createdAt: -1 }).limit(6);
    return reply.send({ success: true, posts });
  } catch (error) {
    console.error("Error fetching posts:", error);
    return reply.code(500).send({ success: false, message: 'Internal Server Error' });
  }
};

const contact_page = async(req,reply)=>{
   return reply.sendFile('./user/contact_page.html');
};



const sendContactMail = async (req, reply) => {
  const { name, email, subject, message } = req.body;

  if (!name || !email || !subject || !message) {
    return reply.code(400).send({ success: false, message: 'All fields are required' });
  }

  try {
    const transporter = nodemailer.createTransport({
      service: 'gmail',
      auth: {
        user: 'sadiaismail6151@gmail.com',
        pass: 'nzxzftoybapvomzu', // ✅ App password
      },
    });

    // 1️⃣ Send Email to Admin
    const mailOptions = {
      from: email,
      to: 'sadiaismail6151@gmail.com',
      subject: `New Contact Form Submission: ${subject}`,
      html: `
        <h3>New Message from Contact Form</h3>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Subject:</strong> ${subject}</p>
        <p><strong>Message:</strong><br>${message}</p>
      `
    };

    await transporter.sendMail(mailOptions);

    // 2️⃣ Auto-Reply to Client
    const autoReplyOptions = {
      from: 'sadiaismail6151@gmail.com',
      to: email,
      subject: 'Thank you for contacting us!',
      html: `
        <p>Dear ${name},</p>
        <p>Thank you for reaching out to us. We have received your message regarding <strong>${subject}</strong>.</p>
        <p>Our team will get back to you shortly.</p>
        <br>
        <p>Best regards,<br>Customer Support Team</p>
      `
    };

    await transporter.sendMail(autoReplyOptions);

    return reply.send({ success: true, message: 'Email sent and auto-reply delivered!' });

  } catch (error) {
    console.error('Email send error:', error);
    return reply.code(500).send({ success: false, message: 'Failed to send email.' });
  }
};






const productDetails = async(req,reply)=>{
     return reply.sendFile('/user/product-detail.html');
}

// make up page admin and user side handle

const makeupadmin = async(req,reply)=>{
     return reply.sendFile('admin/productmakeup.html');
}

const makeupadminshow = async(req,reply)=>{

   try {
    const data = {};
    let imageurl = '';
    let filename = '';

    const parts = req.parts();

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        data[part.fieldname] = part.value;
      } else {
        // ✅ Save file to disk
        filename = `${Date.now()}-${part.filename}`;
        const filePath = path.join(uploadDir, filename);
        const writeStream = fs.createWriteStream(filePath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`; // Relative URL to use on frontend
      }
    }

    if (!imageurl || !data.productName || !data.comparePrice || !data.originalPrice || !data.sku || !data.description || !data.category) {
      return reply.code(400).send({ success: false, message: 'All fields are required.' });
    }

    const createProduct = await Productsmakeup.create({
      productName: data.productName,
      comparePrice: Number(data.comparePrice),
      originalPrice: Number(data.originalPrice),
      sku: data.sku,
      description: data.description,
      category: data.category.toLowerCase(),
      imageurl,
    });

    return reply.send({
      success: true,
      message: '✅ Product saved successfully',
      product: createProduct,
    });

  } catch (error) {
    console.error('❌ Internal server error:', error);
    return reply.code(500).send({
      success: false,
      message: 'Server error while saving product',
    });
  }
};
 
   


const shopnow_page = async(req,reply)=>{
   return reply.sendFile('/user/shopnow_MakeUp.html');
 };

 const makeupproductsshow = async (req, reply) => {
  try {
    const categories = ['productone', 'producttwo', 'productthree', 'productfour','productfive','productsix','productseven','producteight','productnine']; // ✅ Fixed spellings
    const results = [];

    for (const cat of categories) {
      const product = await Productsmakeup.findOne({ category: cat }).sort({ updatedAt: -1 });

      if (product) {
        results.push(product);
      } else {
        console.log(`⚠️ No product found for category: ${cat}`);
      }
    }

    if (results.length === 0) {
      return reply.code(404).send({ message: 'No products found' });
    }

    return reply.send({ success: true, products: results });
  } catch (error) {
    console.error('❌ internal server error', error);
    return reply.status(500).send({ message: 'Internal server error' });
  }
};



const makeUp_product = async(req,reply)=>{
   return reply.sendFile('/user/makeUp_productOne.html');
};


// jewllery page admin&user site

const adminjewllery = async(req,reply)=>{
   return reply.sendFile('admin/productjewllery.html');
};

const adminjewlleryshow = async(req,reply)=>{
  

   try {
    const data = {};
    let imageurl = '';
    let filename = '';

    const parts = req.parts();

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        data[part.fieldname] = part.value;
      } else {
        // ✅ Save file to disk
        filename = `${Date.now()}-${part.filename}`;
        const filePath = path.join(uploadDir, filename);
        const writeStream = fs.createWriteStream(filePath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`; // Relative URL to use on frontend
      }
    }

    if (!imageurl || !data.productName || !data.comparePrice || !data.originalPrice || !data.sku || !data.description || !data.category) {
      return reply.code(400).send({ success: false, message: 'All fields are required.' });
    }

    const createProduct = await Productsjewllery.create({
      productName: data.productName,
      comparePrice: Number(data.comparePrice),
      originalPrice: Number(data.originalPrice),
      sku: data.sku,
      description: data.description,
      category: data.category.toLowerCase(),
      imageurl,
    });

    return reply.send({
      success: true,
      message: '✅ Product saved successfully',
      product: createProduct,
    });

  } catch (error) {
    console.error('❌ Internal server error:', error);
    return reply.code(500).send({
      success: false,
      message: 'Server error while saving product',
    });
  }
};


const shopnow_Jewllery = async(req,reply)=>{
   return reply.sendFile('/user/shopnow_Jewllery.html');
};

 const jewlleryproductshow = async (req, reply) => {
  try {
    const categories = ['productone', 'producttwo', 'productthree', 'productfour','productfive','productsix','productseven','producteight','productnine']; // ✅ Fixed spellings
    const results = [];

    for (const cat of categories) {
      const product = await Productsjewllery.findOne({ category: cat }).sort({ updatedAt: -1 });

      if (product) {
        results.push(product);
      } else {
        console.log(`⚠️ No product found for category: ${cat}`);
      }
    }

    if (results.length === 0) {
      return reply.code(404).send({ message: 'No products found' });
    }

    return reply.send({ success: true, products: results });
  } catch (error) {
    console.error('❌ internal server error', error);
    return reply.status(500).send({ message: 'Internal server error' });
  }
};



const Jewlleryone = async(req,reply)=>{
   return reply.sendFile('/user/Jewlleryone.html');
};


// dress page &admin and user side

const admindress = async(req,reply)=>{
     return reply.sendFile('admin/productdress.html');
}

const admindressshow = async(req,reply)=>{
  

   try {
    const data = {};
    let imageurl = '';
    let filename = '';

    const parts = req.parts();

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        data[part.fieldname] = part.value;
      } else {
        // ✅ Save file to disk
        filename = `${Date.now()}-${part.filename}`;
        const filePath = path.join(uploadDir, filename);
        const writeStream = fs.createWriteStream(filePath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`; // Relative URL to use on frontend
      }
    }

    if (!imageurl || !data.productName || !data.comparePrice || !data.originalPrice || !data.sku || !data.description || !data.category) {
      return reply.code(400).send({ success: false, message: 'All fields are required.' });
    }

    const createProduct = await Productsdress.create({
      productName: data.productName,
      comparePrice: Number(data.comparePrice),
      originalPrice: Number(data.originalPrice),
      sku: data.sku,
      description: data.description,
      category: data.category.toLowerCase(),
      imageurl,
    });

    return reply.send({
      success: true,
      message: '✅ Product saved successfully',
      product: createProduct,
    });

  } catch (error) {
    console.error('❌ Internal server error:', error);
    return reply.code(500).send({
      success: false,
      message: 'Server error while saving product',
    });
  }
};


const shopnow_dress = async(req,reply)=>{
   return reply.sendFile('/user/shopnow_dress.html');
};

 const dressproductshow = async (req, reply) => {
  try {
    const categories = ['productone', 'producttwo', 'productthree', 'productfour','productfive','productsix','productseven','producteight','productnine']; // ✅ Fixed spellings
    const results = [];

    for (const cat of categories) {
      const product = await Productsdress.findOne({ category: cat }).sort({ updatedAt: -1 });

      if (product) {
        results.push(product);
      } else {
        console.log(`⚠️ No product found for category: ${cat}`);
      }
    }

    if (results.length === 0) {
      return reply.code(404).send({ message: 'No products found' });
    }

    return reply.send({ success: true, products: results });
  } catch (error) {
    console.error('❌ internal server error', error);
    return reply.status(500).send({ message: 'Internal server error' });
  }
};


const dressone = async(req,reply)=>{
   return reply.sendFile('/user/dressone.html');
};

// shoes admin&user side

const adminshoes = async(req,reply)=>{
     return reply.sendFile('admin/productshoes.html');
}

const adminshoesshow = async(req,reply)=>{
  

   try {
    const data = {};
    let imageurl = '';
    let filename = '';

    const parts = req.parts();

    const uploadDir = path.join(process.cwd(), 'public', 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir, { recursive: true });
    }

    for await (const part of parts) {
      if (!part.file) {
        data[part.fieldname] = part.value;
      } else {
        // ✅ Save file to disk
        filename = `${Date.now()}-${part.filename}`;
        const filePath = path.join(uploadDir, filename);
        const writeStream = fs.createWriteStream(filePath);
        await pump(part.file, writeStream);

        imageurl = `/uploads/${filename}`; // Relative URL to use on frontend
      }
    }

    if (!imageurl || !data.productName || !data.comparePrice || !data.originalPrice || !data.sku || !data.description || !data.category) {
      return reply.code(400).send({ success: false, message: 'All fields are required.' });
    }

    const createProduct = await Productsshoes.create({
      productName: data.productName,
      comparePrice: Number(data.comparePrice),
      originalPrice: Number(data.originalPrice),
      sku: data.sku,
      description: data.description,
      category: data.category.toLowerCase(),
      imageurl,
    });

    return reply.send({
      success: true,
      message: '✅ Product saved successfully',
      product: createProduct,
    });

  } catch (error) {
    console.error('❌ Internal server error:', error);
    return reply.code(500).send({
      success: false,
      message: 'Server error while saving product',
    });
  }
};


const shopnow_Shows = async(req,reply)=>{
   return reply.sendFile('/user/shopnow_Shows.html');
};

 const shoesproductshow = async (req, reply) => {
  try {
    const categories = ['productone', 'producttwo', 'productthree', 'productfour','productfive','productsix','productseven','producteight','productnine']; // ✅ Fixed spellings
    const results = [];

    for (const cat of categories) {
      const product = await Productsshoes.findOne({ category: cat }).sort({ updatedAt: -1 });

      if (product) {
        results.push(product);
      } else {
        console.log(`⚠️ No product found for category: ${cat}`);
      }
    }

    if (results.length === 0) {
      return reply.code(404).send({ message: 'No products found' });
    }

    return reply.send({ success: true, products: results });
  } catch (error) {
    console.error('❌ internal server error', error);
    return reply.status(500).send({ message: 'Internal server error' });
  }
};


const showsone = async(req,reply)=>{
   return reply.sendFile('/user/showsone.html');
};

// cart & order section

const cart = async(req,reply)=>{
   return reply.sendFile('/user/cart.html');
};
const checkout = async(req,reply)=>{
   return reply.sendFile('/user/checkout.html');
};



const checkoutPost = async (req, reply) => {
  try {
    const orderData = req.body;

    const order = await Orders.create(orderData);

    if (!order) {
      return reply.code(400).send({ message: 'Invalid order data' });
    }

    return reply.code(201).send({
      message: 'Order placed successfully',
      orderId: order._id,
      order
    });

  } catch (error) {
    console.error("Checkout error:", error);
    return reply.code(500).send({ message: 'Internal Server Error' });
  }
};

const ordersget = async(req,reply)=>{
   return reply.sendFile('admin/orders_get.html');
}

const ordersadmin = async (req, reply) => {
  try {
    const fetchdata = await Orders.find();

    if (!fetchdata || fetchdata.length === 0) {
      return reply.send({ message: 'No orders found' });
    }

    const simplifiedOrders = fetchdata.map(order => {
      return {
        paymentMethod: order.paymentMethod,
        totalPrice: order.delivery.totalPrice, // ✅ Use total price from delivery
        products: order.products.map(p => ({
          name: p.name,
          image: p.image
        }))
      };
    });

    return reply.send(simplifiedOrders);
  } catch (error) {
    console.error('Internal server error:', error);
    return reply.code(500).send({ message: 'Internal server error' });
  }
};


// ✅ In controller
  const deleteOrder = async (req, reply) => {
  try {
    const { id } = req.body;

    if (!id) {
      return reply.code(400).send({ success: false, message: 'Order ID is required' });
    }

    const result = await Orders.findByIdAndDelete(id);

    if (result) {
      return reply.send({ success: true, message: 'Order deleted successfully' });
    } else {
      return reply.code(404).send({ success: false, message: 'Order not found' });
    }
  } catch (error) {
    console.error('Delete Order Error:', error);
    return reply.code(500).send({ success: false, message: 'Internal Server Error' });
  }
};




const index = async(req,reply)=>{
    return reply.sendFile('/admin/index.html');
}



const getProductCounts = async (req, reply) => {
  try {
    const makeupCount = await Productsmakeup.countDocuments();
    const jewlleryCount = await Productsjewllery.countDocuments();
    const dressCount = await Productsdress.countDocuments();
    const shoesCount = await Productsshoes.countDocuments();

    reply.send({
      makeup: makeupCount,
      jewllery: jewlleryCount,
      dress: dressCount,
      shoes: shoesCount
    });
  } catch (error) {
    console.error('Count error:', error);
    reply.code(500).send({ error: 'Failed to fetch product counts' });
  }
};


const allproductsshow = async(req,reply)=>{
      try {
    const makeup = await Productsmakeup.find({}, 'imageurl productName sku category stock originalPrice');
    const jewllery = await Productsjewllery.find({}, 'imageurl productName sku category stock originalPrice');
    const dress = await Productsdress.find({}, 'imageurl productName sku category stock originalPrice');
    const shoes = await Productsshoes.find({}, 'imageurl productName sku category stock originalPrice');

    // Add category tag manually if not present in document
    const combined = [
      ...makeup.map(item => ({ ...item.toObject(), category: 'Makeup' })),
      ...jewllery.map(item => ({ ...item.toObject(), category: 'Jewllery' })),
      ...dress.map(item => ({ ...item.toObject(), category: 'Dress' })),
      ...shoes.map(item => ({ ...item.toObject(), category: 'Shoes' })),
    ];

    reply.send({ products: combined });
  } catch (err) {
    console.error('Error fetching all products:', err);
    reply.code(500).send({ error: 'Failed to fetch products' });
  }
}



const thankyou = async(req,reply)=>{
     return reply.sendFile('/user/thankyou.html');
}








 module.exports={
  signupPage,signupForm,login,loginForm,headerflayar,headerflayaradmin,userFlayar,userFlayarShow,adminImageSection,
  uploadSection,usersection,usersectionshow,adminshopimage,adminshopimageshow,usershop,usershopshow,adminProducts,
  adminProductsshow,deleteproduct,userproducts,userproductsshow,makeupadmin,makeupadminshow,
  home_page ,blogAdmin,showAdminPost,blog_page,getAllBlogPosts,contact_page,sendContactMail,productDetails,shopnow_page,makeupproductsshow,adminjewllery,
  adminjewlleryshow,shopnow_Jewllery,jewlleryproductshow,admindress,admindressshow,shopnow_dress,dressproductshow,
  adminshoes,adminshoesshow,shopnow_Shows,shoesproductshow,makeUp_product,cart,checkout,checkoutPost,ordersget,
  ordersadmin,deleteOrder,Jewlleryone,dressone,showsone,index,getProductCounts,allproductsshow,thankyou
   };




