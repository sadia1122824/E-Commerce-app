// models/Product.js

const mongoose = require('mongoose');

const contactSchema = new mongoose.Schema({
  name: {
    type: String,
    required: true,
  },
  email: {
    type: Number,
    required: true,
  },
  choose_subject: {
    type: Number,
    required: true,
  },
  message: {
    type: String,
    required: true,
    
  },

 }, { timestamps: true });

const Contact = mongoose.model('Contact', contactSchema);
module.exports = Contact;
