package blog.blog.repository;

import blog.blog.entitiy.Article;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ArticleRepository extends JpaRepository<Article, Integer>{
}
