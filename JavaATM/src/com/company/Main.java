package com.company;

import java.lang.String;
import java.util.Objects;
import java.util.Scanner;

public class Main {

    public static void Menu() {
        System.out.println("1) Enter cash");
        System.out.println("2) Withdraw cash");
        System.out.println("3) Balance");
        System.out.print("Please enter number: ");
    }

    public static boolean checker = true;

    public static void Choice() {
        System.out.print("Would you want continue ? Please enter(Y/N): ");
        Scanner yesOrno = new Scanner(System.in);
        String a = yesOrno.nextLine();

        if (Objects.equals(a, "Y") || Objects.equals(a, "y")) {
            Menu();
            checker = false;
        }
        else if (Objects.equals(a, "N") || Objects.equals(a, "n")) {
            System.out.println("have a good day");
            checker = true;
        }
        else {
            System.out.println("Error enter");
            Choice();
        }
    }

    public static void main(String[] args) {
        Menu();
        Scanner choice = new Scanner(System.in);

        int balance = 1000;
        boolean boolForFirstDo = true;
        boolean boolForSecondDo = true;

        do {
            do {
                switch (choice.nextByte()) {
                    case 1: {
                        System.out.print("How many cash you want enter: ");
                        Scanner cashEnter = new Scanner(System.in);
                        balance += cashEnter.nextInt();
                        System.out.println("Your balance now: " + balance);
                        Choice();
                        if (checker == false) {
                            boolForFirstDo = false;
                            boolForSecondDo = false;
                        } else {
                            break;
                        }
                        break;
                    }
                    case 2: {
                        System.out.print("How many cash you want: ");
                        Scanner cashEnter = new Scanner(System.in);
                        balance -= cashEnter.nextInt();
                        System.out.println("Your balance: " + balance);
                        Choice();
                        if (checker == false) {
                            boolForFirstDo = false;
                            boolForSecondDo = false;
                        } else {
                            break;
                        }
                        break;
                    }
                    case 3: {
                        System.out.println("Your balance: " + balance);
                        Choice();
                        if (checker == false) {
                            boolForFirstDo = false;
                            boolForSecondDo = false;
                        } else {
                            break;
                        }
                        break;
                    }
                    default: {
                        System.out.print("Please enter valid number: ");
                        boolForFirstDo = false;
                        break;
                    }
                }
            } while (boolForFirstDo == false);
        } while (boolForSecondDo == false);
    }
}
