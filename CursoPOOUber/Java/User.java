package Java;

public class User extends Account{

    Integer viajesAcumulados;

    public User(Integer id, String name, String document, String email, String password, Integer viajesAcumulados) {
        super(id, name, document, email, password);
        this.viajesAcumulados = viajesAcumulados;
    }
    
}