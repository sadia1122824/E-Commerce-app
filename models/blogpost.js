const mongoose = require('mongoose');

const postSchema = new mongoose.Schema({
  date: String,
  description: String,
  imagePath: String
}, { timestamps: true });

const Blogpost = mongoose.model('Blogpost', postSchema);
module.exports = Blogpost;
