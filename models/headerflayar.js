
const mongoose = require('mongoose');

const formDataSchema = new mongoose.Schema({
 
 
  headerDescription: {
    type: String,
    required: true,
    trim: true
  },
  createdAt: {
    type: Date,
    default: Date.now
  }
});

const headerFlayar = mongoose.model('headerFlayar', formDataSchema);
module.exports = headerFlayar;