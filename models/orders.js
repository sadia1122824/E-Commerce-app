const mongoose = require('mongoose');

const orderSchema = new mongoose.Schema({
  customer: {
    fullName: String,
    email: String,
    phone: String
  },
  delivery: {
    address: String,
    postalCode: String,
    totalPrice: Number // ✅ Now sending total directly from frontend
  },
  paymentMethod: String,
  products: [
    {
      image: String,
      name: String,
      price: String,
      qty: Number, // ✅ Optional but useful if quantity is sent
      comparePrice: String,
      sku: String
    }
  ]
}, { timestamps: true });

const Orders = mongoose.model('Orders', orderSchema);

module.exports = Orders;
