package com.company;

import java.util.*;
import java.text.DateFormat;
import java.text.SimpleDateFormat;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Random random = new Random();

        System.out.println("\nOpdracht 3.1");

        System.out.println("1ste Nummer om optetellen:");
        int number1 = scanner.nextInt();

        System.out.println("2de nummer om optetellen:");
        int number2 = scanner.nextInt();

        System.out.println("wat is " + number1 + " + " + number2 + " ?");
        int answer = scanner.nextInt();

        if(answer == (number1 + number2)) {
            System.out.println("Top");
        } else {
            System.out.println("Flop");
        }

        System.out.println("\nOpdracht 3.2");

        int randomNumber1 = random.nextInt(10 - 0 + 1) + 0;
        int randomNumber2 = random.nextInt(10 - 0 + 1) + 0;
        int randomNumber3 = random.nextInt(10 - 0 + 1) + 0;

        System.out.println("Wat is " + randomNumber1 + " x " + randomNumber2 + " x " + randomNumber3 + " ?");
        int randomAnswer = scanner.nextInt();

        if(randomAnswer == (randomNumber1 * randomNumber2 * randomNumber3)) {
            System.out.println("Top");
        } else {
            System.out.println("Flop");
        }

        System.out.println("\nOpdracht 3.3");

        int generatedMonth = random.nextInt(12 - 1 + 1) + 1;

        switch(generatedMonth) {
            case 1:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is Januari.");
                break;
            case 2:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is Februari.");
                break;
            case 3:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is Maart.");
                break;
            case 4:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is April.");
                break;
            case 5:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is  is Mei.");
                break;
            case 6:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is Juni.");
                break;
            case 7:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is July.");
                break;
            case 8:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is Augustus.");
                break;
            case 9:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is September.");
                break;
            case 10:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is Oktober.");
                break;
            case 11:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is November.");
                break;
            case 12:
                System.out.println("Random nummer tussen  1 en 12 is " + generatedMonth + " en de maand is December.");
                break;
        }

        System.out.println("\nOpdracht 3.4");

        //System.out.println("Day of the week in digits:");
        //int weekDay = scanner.nextInt();

        System.out.println("Hoeveel dagen in de toekomst?");
        int futureDays = scanner.nextInt();

        Date date = new Date();
        Calendar cal = Calendar.getInstance();
        cal.setTime(date);
        cal.add(Calendar.DAY_OF_YEAR, futureDays);
        Date weekDay = cal.getTime();
        DateFormat df = new SimpleDateFormat("EEE");
        String weekDayName = df.format(weekDay);

        switch(weekDayName) {
            case "Mon":
                weekDayName = "Maandag";
                break;
            case "di":
                weekDayName = "Dinsdag";
                break;
            case "woe":
                weekDayName = "Woensdag";
                break;
            case "do":
                weekDayName = "Donderdag";
                break;
            case "vrij":
                weekDayName = "Vrijdag";
                break;
            case "zat":
                weekDayName = "Zaterdag";
                break;
            case "zon":
                weekDayName = "Zondag";
                break;
        }

        System.out.println(futureDays + " Dagen vanaf nu is een " + weekDayName + ".");

        System.out.println("\nOpdracht 3.5");

        System.out.println("Mijn gewicht in kg:");
        double weight = scanner.nextDouble();

        System.out.println("Mijn lengte in m:");
        double length = scanner.nextDouble();

        double bmi = weight / (length * length);

        if(bmi < 18.5) {
            System.out.println("Mijn BMI is " + bmi + ". En ik ben jonger dan 20 ik ben niet dik.");
        } else if((bmi >= 18.5) && (bmi < 25.0)) {
            System.out.println("Mijn BMI is " + bmi + ". En ik ben jonger dan 20 ik heb een normaal BMI.");
        } else if((bmi >= 25.0) && (bmi < 30.0)) {
            System.out.println("Mijn BMI is " + bmi + ". En ik ben jonger dan 20 ik ben dik.");
        } else if(bmi > 30.0) {
            System.out.println("Mijn BMI is " + bmi + ". En ik ben jonger dan 20 ik ben fucking dik.");
        }
        System.out.println("\nOpdracht 3.6");

        System.out.println("heel nummer 1:");
        int input1 = scanner.nextInt();

        System.out.println("heel nummer 2:");
        int input2 = scanner.nextInt();

        System.out.println("heel nummer 3:");
        int input3 = scanner.nextInt();

        int[] order = new int[]{input1, input2, input3};
        Arrays.sort(order);
        for(int i = order.length - 1; i>=0; i--) {
            if(order[i] == order[0]) {
                System.out.println(order[i] + " is het kleinste nummer.");
            } else if(order[i] == order[1]) {
                System.out.println(order[i] + " is het midden nummer.");
            } else if(order[i] == order[2]) {
                System.out.println(order[i] + " is het grootste nummer .");
            }
        }
    }
}
