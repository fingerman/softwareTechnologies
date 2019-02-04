package blog.blog.controller;

import blog.blog.entitiy.Article;
import blog.blog.repository.ArticleRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.stereotype.Controller;

import java.util.List;

@Controller
public class HomeController {

    @Autowired
    private ArticleRepository articleRepository;

    @GetMapping("/")
    public String index(Model model){

        List<Article> articles = this.articleRepository.findAll();
        model.addAttribute("view", "home/index");
        model.addAttribute("articles", articles);
        return "base-layout";
    }


    @GetMapping("/login")
    public String login(Model model){
        model.addAttribute("view", "user/login");
        return "base-layout";
    }
}


