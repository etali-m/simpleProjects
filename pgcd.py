
""" 
This is a programm who compute the pgcd of two integer
""" 
print("A SMALL PROGRAM TO COMPUTE THE PGCD OF TWO INTEGER")
nombre1 = int(input("Entrer le premier nombre :"))
nombre2 = int(input("Entrer le deuxième nombre :"))
reste = nombre1%nombre2
while reste != 0:
    nombre1 = nombre2
    nombre2 = reste
    reste = nombre1%nombre2 
print("Le pgcd est : " + str(nombre2))
