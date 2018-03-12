package com.company;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("\nOpdracht 2.1");
        double kilometer = 1.6;

        System.out.println("Aantal miles omte veranderen naar kilometer:");
        double mile = scanner.nextDouble();

        double result = kilometer * mile;
        System.out.println("Kilometer: " + result);

        System.out.println("\nOpdracht 2.2");

        System.out.println("How many years old are you?");
        int years = scanner.nextInt();

        System.out.println("How many months after that?");
        int months = scanner.nextInt();

        months = (years * 12) + months;

        double minutes = Math.ceil(months * 30 * 24 * 60);

        System.out.println("you\'re " + minutes + " minutes old.");

        System.out.println("\nOpdracht 2.3");

        System.out.println("Startbedrag:");
        double startBedrag = scanner.nextDouble();

        System.out.println("Rentepercentage:");
        int rente = scanner.nextInt();

        double bedrag2 = startBedrag / 100;
        double eindBedrag = (bedrag2 * rente) + startBedrag;

        System.out.println("Je bedrag met " + rente + "% rente is " + eindBedrag + ".");

        System.out.println("\nOpdracht 2.4");

        System.out.println("Kies nummer tussen 10 en 100:");
        int number = scanner.nextInt();

        if(number <= 10) {
            System.out.println("Je nummer is minder dan 10.");
        } else if(number >= 100) {
            System.out.println("Je nummer is boven de 100.");
        } else if((number > 10) && (number < 100)) {

            int number1 = number - 2;
            int number2 = number - 1;
            int number3 = number + 1;
            int number4 = number + 2;

            System.out.println("Je nummer met 2 vorige en volgende nummers: " + number1 + " - " + number2 + " -| " + number + " |- " + number3 + " - " + number4 + ".");
        }

        System.out.println("\nOpdracht 2.5");

        System.out.println("Nummer tussen 0 en 1000:");
        int splitNumber = scanner.nextInt();

        if(number <= 0) {
            System.out.println("Je nummer is minder dan 0.");
        } else if(splitNumber >= 1000) {
            System.out.println("Je nummer is boven de  1000.");
        } else if((splitNumber > 0) && (splitNumber < 1000)) {

            int number1 = splitNumber % 10;
            splitNumber = splitNumber / 10;
            int number2 = splitNumber % 10;
            splitNumber = splitNumber / 10;
            int number3 = splitNumber % 10;

            int resultNumber = number3 * number2 * number1;

            System.out.println(number3 + " * " + number2 + " * " + number1 + " = " + resultNumber);
        }
    }
}
