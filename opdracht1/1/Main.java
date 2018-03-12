package com.company;

public class Main {

    public static void main(String[] args) {
        System.out.println("Opdracht 1.1");
	    System.out.println("Java is Object Georiënteerd\n" + "Java is strongly typed\n" + "Java is geen JavaScript\n");


        System.out.println("\nOpdracht 1.2");
        for (int i=1; i<=5; i++) {
            System.out.println("Java is geweldig!");
        }

        System.out.println("\nOpdracht 1.3");
        System.out.println("a\ta^2\ta^3\ta^4\n" +
                            "1\t1\t1\t1\n" +
                            "2\t4\t8\t16\n" +
                            "3\t9\t27\t81\n" +
                            "4\t16\t64\t256\n");

        System.out.println("\nOpdracht 1.4");
            System.out.println((7.5 * 6.5 - 4.5 * 3) / (47.5 * 5.5));

        System.out.println("\nOpdracht 1.5");
        System.out.println(1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10);

        System.out.println("\nOpdracht 1.6");
        System.out.println(4 * (1.0 - (1.0/3.0) + (1.0/5.0) - (1.0/7.0) + (1.0/9.0) - (1.0/11.0) + (1.0/13.0)));

        System.out.println("\nOpdracht 1.7");
        double pi = 3.14159;
        double straal = 6.5;
        System.out.println("Oppervlakte: " + (straal * straal * pi));
        System.out.println("omtrek: " + (2 * straal * pi));

        System.out.println("\nOpdracht 1.8");
        double lengte = 5.3;
        double breedte = 8.6;
        System.out.println("Oppervlakte: " + (lengte * breedte));
        System.out.println("Omtrek: " + (2 * (lengte + breedte)));
    }
}
