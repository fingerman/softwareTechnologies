using Blog.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;

namespace Blog.Controllers
{
    public class ArticleController : Controller
    {
        // GET: Article
        public ActionResult Index()
        {
            return RedirectToAction("List");
        }

        // GET: Article/List
        public ActionResult List()
        {
            using (var database = new BlogDbContext())
            {
                //get articles from db
                var articles = database.Articles.Include(a => a.Author).ToList();

                return View(articles);
            }
                
        }

        // GET: Article/Details
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var database = new BlogDbContext())
            {
                if (article == null)
                {
                    return HttpNotFound();
                }

                var article = database.Articles.Where(a => a.Id == id).Include(a => a.Author).First();

                return View(article);

            }
        }

        // GET: Article/Create
        public ActionResult Create()
        {
            return View();
        }


        // POST: Article/Create
        public ActionResult Create(Article article)
        {
            if (ModelState.IsValid)
            {

                using (var database = new BlogDbContext())
                {
                    var authorId = database.Users.Where(u => u.UserName == this.User.Identity.Name).First().Id;

                    article.AuthorId = authorId;

                    database.Articles.Add(article);
                    database.SaveChanges();

                    return RedirectToAction("Index");
                }
            }
            return View(article);
        }

        // GET: Article/Delete
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var database = new BlogDbContext())
            {


                var article = database.Articles.Where(a => a.Id == id).Include(a => a.Author).First();


                if (article == null)
                {
                    return HttpNotFound();
                }

                

                return View(article);

            }
        }



    }
}