const mongoose = require('mongoose');

const imageSchema = new mongoose.Schema({
  filename: {
    type: String,
    required: true
  },
  path: {
    type: String,
    required: true
  },
  category: {  // ✅ Add this field
    type: String,
    enum: ['men', 'women', 'accessories'],
    required: true
  }
}, {
  timestamps: true
});

const Shopproduct = mongoose.model('Shopproduct', imageSchema);
module.exports = Shopproduct;
