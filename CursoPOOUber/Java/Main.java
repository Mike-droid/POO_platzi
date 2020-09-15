package Java;

public class Main {
    public static void main(String[] args) {
        //System.out.println("Hola mundo");

        UberX uberx = new UberX("AMQ123" , new Account("Andres Herrera","AND123"), "Nissan","Tiida");
        uberx.setPassenger(4);
        uberx.printDataCar();

        UberVan van = new UberVan("GVB432", new Account("Jose Reyes","34342ffs"));
        van.setPassenger(6);
        van.printDataCar();

        /* Car car2 = new Car("QWE321" , new Account("Andrea Herrera", "AND321"));
        car2.passenger = 3;
        car2.printDataCar(); */

        /* Account cuenta1 = new Account("Miguel Reyes", "REMM981022");
        cuenta1.printDataAccount(); */
    }
}