const mongoose = require('mongoose');

const productmakeupSchema = new mongoose.Schema({
  productName: {
    type: String,
    required: true,
  },
  comparePrice: {
    type: Number,
    required: true,
  },
  originalPrice: {
    type: Number,
    required: true,
  },
  sku: {
    type: String,
    required: true,
    unique: true, 
  },
  description: {
    type: String,
    required: true,
  },
  category: {
    type: String,
    enum: ['productone', 'producttwo', 'productthree', 'productfour','productfive','productsix','productseven','producteight','productnine'], // ✅ predefined categories
    required: true,
  },
  imageurl: {
    type: String,
    required: true,
  },
}, { timestamps: true });

const Productsjewllery = mongoose.model('Productsjewllery', productmakeupSchema);
module.exports = Productsjewllery;
