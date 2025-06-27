const fastify = require('fastify');
const fastifyFormBody = require('@fastify/formbody');
const fastifyStatic = require('@fastify/static');
const path = require('path');
const multipart = require('@fastify/multipart');
const routes = require('./routs/user.routs.js');
const jwt = require('@fastify/jwt');
const cookie = require('@fastify/cookie');

const ConnectDB = require('./config/db.js');
require('dotenv').config();
ConnectDB();

const app = fastify();
 app.register(cookie);

app.register(jwt,{
  secret: process.env.JWT_SECRET,
  cookie:{
     cookieName:'accessToken',
     signed:false,
  },
   
  sign:{
       expiredIn:'1h',
  }
});
app.decorate('authenticate', async (req, reply) => {
    try {
      const token = req.cookies.accessToken;
      if (!token) {
        return reply.redirect('/login');
      }
      const validate = await req.jwtVerify(); 
  
      if (!validate) {
        return reply.redirect('/login');
      }
  
    } catch (error) {
      console.log('Error during token verification:', error);
      return reply.redirect('/login');
    }
  });

app.register(fastifyFormBody);
app.register(multipart, {
  attachFieldsToBody: false, 
  limits: {
    fileSize: 100 * 1024 * 1024 // 20 MB
  }
});

app.register(fastifyStatic,{
    root:path.join(__dirname,"public"),
      prefix:"/"

});

app.register(routes);


const start = async(req,reply)=>{
    try {
        await app.listen({port:3000});
        console.log("http://localhost:3000 is running");

         } catch (error) {
        console.log(error);
    }
   
}
start();