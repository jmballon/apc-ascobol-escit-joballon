       IDENTIFICATION DIVISION.
       PROGRAM-ID. YOUR-PROGRAM-NAME.
       DATA DIVISION.
       FILE SECTION.
       WORKING-STORAGE SECTION.
       01 Char PIC X.
           88  Vowel           VALUE "a", "e", "i", "o", "u".
           88  Consonant       VALUE "b","c","d","f","g","h",
                               "j" THRU "n","p" THRU "t","v" THRU "z".
           88 Digit            VALUE "0" THRU "9".
           88 ValidCharacter    VALUE "a" THRU "z", "0" THRU "9".
       PROCEDURE DIVISION.
       Begin.
         DISPLAY "Enter lowercase character or digit. No data ends.".
         ACCEPT Char.
         PERFORM UNTIL NOT ValidCharacter
          EVALUATE TRUE
            WHEN Vowel DISPLAY "The letter " Char " is a vowel."
            WHEN Consonant DISPLAY "The letter " Char " is a consonant."
            WHEN Digit DISPLAY Char " is a digit."
            WHEN OTHER DISPLAY "problems found"
          END-EVALUATE
             ACCEPT Char
           END-PERFORM
            STOP RUN.
       END PROGRAM YOUR-PROGRAM-NAME.
