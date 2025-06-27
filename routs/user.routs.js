 const {
    signupPage,signupForm,login,loginForm,headerflayar,headerflayaradmin,userFlayar,userFlayarShow,adminImageSection,
    uploadSection,usersection,usersectionshow,adminshopimage,adminshopimageshow,usershop,usershopshow,
    adminProducts,adminProductsshow,userproducts,deleteproduct,
    userproductsshow,makeupadmin,makeupadminshow,home_page,blogAdmin,showAdminPost,blog_page,getAllBlogPosts,contact_page,sendContactMail,productDetails,
    shopnow_page,makeupproductsshow,adminjewllery,adminjewlleryshow,shopnow_Jewllery,jewlleryproductshow,
    admindress,admindressshow,shopnow_dress,dressproductshow,adminshoes,adminshoesshow,shopnow_Shows,
    shoesproductshow,makeUp_product,Jewlleryone,dressone,showsone,
    cart,checkout,checkoutPost,ordersget,ordersadmin,deleteOrder,index,getProductCounts ,allproductsshow,thankyou
        } = require('../controllers/user.controller.js');

const routes = async (app, options) => {
    app.get('/',(request,reply)=>{
       return({message:'this is working'})
    });

    app.get('/signup',signupPage);
    app.post('/signup',signupForm);
    app.get('/login',login);
    app.post('/login',loginForm);
    app.get('/headerFlayar',headerflayar);
    app.post('/headerFlayar',headerflayaradmin);
    app.get('/userFlayar',userFlayar);
    app.post('/userFlayar',userFlayarShow);
    app.get('/adminImageSection',adminImageSection);
    app.post('/adminImageSection',uploadSection);
    app.get('/usersection',usersection);
    app.get('/usersectionshow',usersectionshow);
    app.get('/adminshopimage',adminshopimage);
    app.post('/adminshopimage',adminshopimageshow);
    app.get('/usershop',usershop);
    app.get('/usershopshow',usershopshow);
    app.get('/adminProducts',adminProducts);
    app.post('/adminProducts',adminProductsshow);
    // app.get('/fetchproductsadmin',fetchproducts);
    // app.post('/fetchproductsadmin',fetchproductsadmin);
    app.delete('/deleteproduct',deleteproduct);
    app.get('/userproducts',userproducts);
    app.get('/userproductsshow',userproductsshow);
 
    app.get('/home_page',home_page );
    app.get('/blogAdmin',blogAdmin);
    app.post('/blogAdmin',showAdminPost);
    app.get('/blog_page',blog_page);
    app.get('/getAllBlogPosts',getAllBlogPosts)
    app.get('/contact_page',contact_page);
    app.post('/contact_page',sendContactMail);
    app.get('/productDetails',productDetails);
    
    app.get('/makeupadmin',makeupadmin);
    app.post('/makeupadmin',makeupadminshow);
    app.get('/shopnow_MakeUp',shopnow_page);
    app.get('/makeupproductsshow',makeupproductsshow);
    app.get('/makeUp_productOne',makeUp_product);
  
    
    app.get('/adminjewllery',adminjewllery);
    app.post('/adminjewllery',adminjewlleryshow);
    app.get('/shopnow_Jewllery',shopnow_Jewllery);
    app.get('/jewlleryproductshow',jewlleryproductshow);
    app.get('/Jewlleryone',Jewlleryone);
   
    
    app.get('/admindress',admindress);
    app.post('/admindress',admindressshow);
    app.get('/shopnow_dress',shopnow_dress);
    app.get('/dressproductshow',dressproductshow);
    app.get('/dressone', dressone);

    
    app.get('/adminshoes',adminshoes);
    app.post('/adminshoes',adminshoesshow)
    app.get('/shopnow_Shows',shopnow_Shows);
    app.get('/shoesproductshow',shoesproductshow);
    app.get('/showsone',showsone);
  

    app.get('/cart',cart);
    app.get('/checkout',checkout);
    app.post('/checkoutPost',checkoutPost);
    app.get('/ordersget',ordersget);
    app.post('/ordersget',ordersadmin);
    app.post('/deleteOrder',deleteOrder);
    app.get('/index',{preHandler:[app.authenticate]},index);
    app.get('/getProductCounts',getProductCounts );
    app.get('/allproductsshow',allproductsshow);
    app.get('/thankyou',thankyou);
 
   
};

module.exports = routes;
