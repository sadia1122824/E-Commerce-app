const mongoose = require('mongoose');

const productSchema = new mongoose.Schema({
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
    enum: ['makeup', 'jewellery', 'dress', 'shoes'], // ✅ predefined categories
    required: true,
  },
  imageurl: {
    type: String,
    required: true,
  },
}, { timestamps: true });

const Products = mongoose.model('Products', productSchema);
module.exports = Products;
