import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  database="se_project",
  port=3307
)

readFile = open("updatedQuestions.txt","r")

mycursor = mydb.cursor()

myStr = readFile.readline()

qCount = 0
correctFlagA = 0
correctFlagB = 0
correctFlagC = 0
correctFlagD = 0
correctFlagE = 0
qStr = None
runCount = 0
chapFlag = 0
ansA = None
ansB = None
ansC = None
ansD = None
ansE = None
firstFlag = 0


while (myStr != None):
    
    if (myStr == '\r'):
        myStr == None

    elif (myStr == "Ch1:\n") or (myStr == "Ch2:\n") or (myStr == "Ch3:\n") or (myStr == "Ch4:\n") or (myStr == "Ch5:\n"):

        chapFlag = 1

        print(" ")
        print(" ")
        print("New Chapter:")
        
        if myStr[2] == "1":
            chapNum = 1
        elif myStr[2] == "2":
            chapNum = 2
        elif myStr[2] == "3":
            chapNum = 3
        elif myStr[2] == "4":
            chapNum = 4
        elif myStr[2] == "5":
            chapNum = 5

        print(chapNum)
        print("")
        print("")
    

    elif ((myStr != "\n") and (qCount == 0)):

        qStr = myStr
        qCount = qCount + 1
        

    elif ((myStr != "\n") and (qCount == 1)):

        ansA = myStr
        qCount = qCount + 1
        ansA = ansA.replace("\n","")
        
        if (ansA[-1] == "-"):
        
            correctFlagA = 1
            ansA = ansA[:-1]

    elif ((myStr != "\n") and (qCount == 2)):

        ansB = myStr
        qCount = qCount + 1
        ansB = ansB.replace("\n", "")

        if (ansB[-1] == "-"):
        
            correctFlagB = 1
            ansB = ansB[:-1]

    elif ((myStr != "\n") and (qCount == 3)):

        ansC = myStr
        qCount = qCount + 1
        ansC = ansC.replace("\n", "")

        if (ansC[-1] == "-"):
        
            correctFlagC = 1
            ansC = ansC[:-1]

    elif ((myStr != "\n") and (qCount == 4)):

        ansD = myStr
        qCount = qCount + 1
        ansD = ansD.replace("\n", "")

        if (ansD[-1] == "-"):
        
            correctFlagD = 1
            ansD = ansD[:-1]
        
    elif ((myStr != "\n") and (qCount == 5)):

        ansE = myStr
        qCount = qCount + 1
        ansE = ansE.replace("\n", "")

        if (ansE[-1] == "-"):
        
            correctFlagE = 1
            ansE = ansE[:-1]


    if myStr == "\n":

        if chapFlag == 1:
            
            chapFlag = 0
        
        else:
            
            if qStr != None:

                qStr = qStr.replace("\n", "")
                
                
                mycursor.execute("SELECT MAX(questionID) FROM questions;")
                #mydb.commit()
                nextN = mycursor.fetchall()
                nextQ = nextN[0]
                nextQ = nextQ[0]
                print(runCount)
                runCount = runCount + 1
                if (nextQ == None):
                    nextQ = 0
                    print("First.")
                else:
                    print(nextQ)
                    print(type(nextQ))
                    nextQ = nextQ + 1

                print(qStr)
                print(chapNum)

                #sql query
                mycursor.execute("INSERT INTO `questions`(`questionID`, `question`, `chapter`) VALUES (%s,%s,%s)", (nextQ, qStr, chapNum))
                
                mydb.commit()

                if (firstFlag == 0):
                    mycursor.execute("SELECT MAX(questionID) FROM questions;")
                    #mydb.commit()
                    nextN = mycursor.fetchall()
                    nextQ = nextN[0]
                    nextQ = nextQ[0]
                    print(runCount)
                    runCount = runCount + 1
                    if (nextQ == None):
                        nextQ = 0
                        print("First.")
                    else:
                        print(nextQ)
                        print(type(nextQ))

                

                if (ansA != None):
                    mycursor.execute("SELECT MAX(answerID) FROM answers_a")
                    nextA = mycursor.fetchall()
                    #mydb.commit() #maybe
                    nextA = nextA[0]
                    nextA = nextA[0]
                    if (nextA == None):
                        nextA = 0
                        print("First: A")
                    else:
                        print(nextA)
                        print(type(nextA))
                        nextA = nextA + 1
                        
                    sqlAnsA = "INSERT INTO `answers_a` (`answerID`, `answer`, `questionID`, `correct`) VALUES (%s, %s, %s, %s)"
                    sqlValA = (nextA, ansA, nextQ, correctFlagA)
                    print(sqlValA)
                    mycursor.execute(sqlAnsA, sqlValA)
                    mydb.commit()

                    mycursor.execute("SELECT MAX(answerID) FROM answers_b;")

                if (ansB != None):
                    #mydb.commit()
                    nextB = mycursor.fetchall()
                    nextB = nextB[0]
                    nextB = nextB[0]
                    if (nextB == None):
                        nextB = 0
                        print("First: B")
                    else:
                        print(nextB)
                        print(type(nextB))
                        nextB = nextB + 1

                    sqlAnsB = "INSERT INTO `answers_b` (`answerID`, `answer`, `questionID`, `correct`) VALUES (%s, %s, %s, %s)"
                    sqlValB = (nextB, ansB, nextQ, correctFlagB)
                    print(sqlValB)
                    mycursor.execute(sqlAnsB, sqlValB)
                    mydb.commit()

                if (ansC != None):

                    mycursor.execute("SELECT MAX(answerID) FROM answers_c;")
                    #mydb.commit()
                    nextC = mycursor.fetchall()
                    nextC = nextC[0]
                    nextC = nextC[0]

                    if (nextC == None):
                        nextC = 0
                        print("First.")
                    else:
                        print(nextC)
                        print(type(nextC))
                        nextC = nextC + 1
                    

                    sqlAnsC = "INSERT INTO `answers_c` (`answerID`, `answer`, `questionID`, `correct`) VALUES (%s, %s, %s, %s)"
                    sqlValC = (nextC, ansC, nextQ, correctFlagC)
                    print(sqlValC)
                    mycursor.execute(sqlAnsC, sqlValC)
                    mydb.commit()

                if (ansD != None):

                    mycursor.execute("SELECT MAX(answerID) FROM answers_d;")
                    #mydb.commit()
                    nextD = mycursor.fetchall()
                    nextD = nextD[0]
                    nextD = nextD[0]
                    if (nextD == None):
                        nextD = 0
                        print("First.")
                    else:
                        print(nextD)
                        print(type(nextD))
                        nextD = nextD + 1

                    sqlAnsD = "INSERT INTO `answers_d` (`answerID`, `answer`, `questionID`, `correct`) VALUES (%s, %s, %s, %s)"
                    sqlValD = (nextD, ansD, nextQ, correctFlagD)
                    print(sqlValD)
                    mycursor.execute(sqlAnsD, sqlValD)
                    mydb.commit()

                if (ansE != None):

                    mycursor.execute("SELECT MAX(answerID) FROM answers_e;")
                    #mydb.commit()
                    nextE = mycursor.fetchall()
                    nextE = nextE[0]
                    nextE = nextE[0]
                    if (nextE == None):
                        nextE = 0
                        print("First.")
                    else:
                        print(nextE)
                        print(type(nextE))
                        nextE = nextE + 1

                    sqlAnsE = "INSERT INTO `answers_e` (`answerID`, `answer`, `questionID`, `correct`) VALUES (%s, %s, %s, %s)"
                    sqlValE = (nextE, ansE, nextQ, correctFlagE)
                    print(sqlValE)
                    mycursor.execute(sqlAnsE, sqlValE)
                    mydb.commit()

            correctFlagA = 0
            correctFlagB = 0
            correctFlagC = 0
            correctFlagD = 0
            correctFlagE = 0
            ansA = None
            ansB = None
            ansC = None
            ansD = None
            ansE = None
            qStr = None
            qCount = 0

    myStr = readFile.readline()
