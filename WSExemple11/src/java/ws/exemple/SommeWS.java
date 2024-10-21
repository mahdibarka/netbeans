package ws.exemple;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

@WebService(serviceName = "SommeWS")
public class SommeWS {
    @WebMethod(operationName = "calculerSomme")
    public int calculerSomme(@WebParam(name = "a") int a, @WebParam(name = "b") int b) {
        return a + b;
    }
}
