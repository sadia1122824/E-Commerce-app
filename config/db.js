const mongoose = require('mongoose');
const URI = "mongodb://localhost:27017/Bclix_project";

const ConnectDB = async(req,reply)=>{
    try {
        await mongoose.connect(URI);
        console.log('db connected successfully');
        
    } catch (error) {
        console.log('db connected fail');
        
    }
}
module.exports = ConnectDB;