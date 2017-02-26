       IDENTIFICATION DIVISION.
       PROGRAM-ID. YOUR-PROGRAM-NAME.
       DATA DIVISION.
       FILE SECTION.
       WORKING-STORAGE SECTION.
       01  Num1           PIC 9  VALUE ZEROS.
       01  Num2           PIC 9  VALUE ZEROS.
       01  Result         PIC 99 VALUE ZEROS.
       01  Operator       PIC X  VALUE SPACE.
       PROCEDURE DIVISION.
       MAIN-PROCEDURE.
              DISPLAY "Enter First Number      : " WITH NO ADVANCING
              ACCEPT Num1
              DISPLAY "Enter Second Number     : " WITH NO ADVANCING
              ACCEPT Num2
              DISPLAY "Enter operator (+ or *) : " WITH NO ADVANCING
              ACCEPT Operator
              IF Operator = "+" THEN
                 ADD Num1, Num2 GIVING Result
              END-IF
              IF Operator = "*" THEN
                 MULTIPLY Num1 BY Num2 GIVING Result
              END-IF
              DISPLAY "Result is = ", Result
              STOP RUN.
       END PROGRAM YOUR-PROGRAM-NAME.
