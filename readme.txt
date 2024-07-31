s = single responsibility principle => a class should have a single responsibilty. it should do one thing only.
    method print_pdf and print_html should seperate

o = open/close principle => code should be open to extension and closed for modification

l = liskov substitutuion principle => extend a class

i = interface segrigation principle => no client should be used to implement a function which  it dont use.
interface driveinterface
    two mehtods brake and horn

classes : drivecar/drivebicycle
    here required two interfaces as cycle dont use horn method

d = dependency inversion principle => service class should rely on interface. high level module should not rely on low level module.
mail service