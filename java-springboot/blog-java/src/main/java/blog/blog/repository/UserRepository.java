package blog.blog.repository;

import blog.blog.entitiy.User;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UserRepository extends JpaRepository<User, Integer>{

    User findByEmail(String email);
}
