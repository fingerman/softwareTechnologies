const userController = require('../../../../../../Users/computer/Desktop/softuni/Programming Fundamentials/SoftwareTechnologies/08. Software-Technologies-JavaScript-Blog-Basic-Functionality-Skeleton/SoftUniBlogSkeleton/SoftUniBlog/controllers/user');
const homeController = require('../../../../../../Users/computer/Desktop/softuni/Programming Fundamentials/SoftwareTechnologies/08. Software-Technologies-JavaScript-Blog-Basic-Functionality-Skeleton/SoftUniBlogSkeleton/SoftUniBlog/controllers/home');

module.exports = (app) => {
    app.get('/', homeController.index);

    app.get('/user/register', userController.registerGet);
    app.post('/user/register', userController.registerPost);

    app.get('/user/login', userController.loginGet);
    app.post('/user/login', userController.loginPost);

    app.get('/user/logout', userController.logout);
};

