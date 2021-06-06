import mysql.connector
from mysql.connector import errorcode

class databaseObject:
    def __init__(self):
        self.CURSOR = 0
        self.database = 0
        self.connect()
        self.query("use `conormcf_personal`")

    def connect(self):
        with open('credentials.txt') as credentials:
            username = credentials.readline().replace('\n','')
            password = credentials.readline().replace('\n','')
            hostid = credentials.readline().replace('\n','')
            
        try:
            self.database = mysql.connector.connect(
                user = username,
                passwd = password,
                host = hostid)
        except mysql.connector.Error as err:
            if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
                print("Invalid credentials")
            elif err.errno == errorcode.ER_BAD_DB_ERROR:
                print("Database does not exist")
            else:
                print(err)
        else:
            print("Database Connection Established")

        self.CURSOR = self.database.cursor()

    def query(self, query, data = None):
        try:
            if data:
                if type(data) is not tuple:
                    data = (data,)
                self.CURSOR.execute(query, data)
            else:
                self.CURSOR.execute(query)
        
            # Return as list instead of having to deal with CURSOR
            returnVals = []
            for item in self.CURSOR:
                returnVals.append(item)    
                
            return returnVals
        except Exception as e:
            return []

    def commit(self):
        self.database.commit()

    def close(self):
        self.CURSOR.close()
        self.database.close()

