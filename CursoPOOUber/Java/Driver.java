package Java;

public class Driver extends Account{

    Integer trabajosRealizados;

    public Driver(Integer id, String name, String document, String email, String password, Integer trabajosRealizados) {
        super(id, name, document, email, password);
        this.trabajosRealizados = trabajosRealizados; 
    }
    
}