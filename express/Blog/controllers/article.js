const mongoose = require('mongoose');
//const Article = mongoose.model('Article');
const Article = require('../models/Article');

module.exports = {
    index: (req, res) => {
        Article.find({}).limit(6).populate('author').then(articles => {
            res.render('home/index', {'articles' : articles});
        });
    },

    createGet: (req, res) => {
        res.render('article/create');
    },

    createPost: (req, res) => {
        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged in to make articles!'
        } else if (!articleArgs.title) {
            errorMsg = 'Invalid title';
        } else if (!articleArgs.content) {
            errorMsg = 'Invalid content'
        }

        if (errorMsg) {
            res.render('article/create', {error: errorMsg});
            return;
        }

        articleArgs.author = req.user.id;
        Article.create(articleArgs).then(article => {
            req.user.articles.push(article.id);
            req.user.save(err => {
                if (err) {
                    res.redirect('/', {error: err.message});
                }
                else {
                    res.redirect('/');
                }
            });
        });
    },




    details: (req, res) => {
        let id = req.params.id;

        Article.findById(id).populate('author').then(article => {
            res.render('article/details', article)
        });
    },
};







