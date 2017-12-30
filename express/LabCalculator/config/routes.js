const homeController = require('./../controllers/home');


module.exports = (app) => {
    app.get('/', homeController.indexGet);
    app.post('/', homeController.indexPost);
};



/*
 •	const homeController = require('./../controllers/home')
 This bit of code imports our controller’s logic. Before we can call any methods,
 we need to know those methods exist, right?
 •	module.exports
 This is the piece of code which takes the code inside it and exposes it to the outside
 world. We’re putting our code here, because Node.JS needs to have access to it, so it can
 execute the action when our user calls the specified route (examples: /calculate, /edit/2, /login).
 •	app.get('/', homeController.indexGet)
 This piece of code tells Node.JS to listen for any GET requests on the
 “/” route, and when it finds one – to execute the homeController.indexGet method
 (this is why we needed to import the home controller up there using require().


 */