import mysql.connector as connector

class Client():
    def __init__(self):
        self.__connection = connector
        self.__serverInfo = {'host':'76.20.82.68', 'port':'3306'} # Note: 76.20.82.68 is Anthony's Home IP Address
        self.__userInfo = {'user':'interface', 'password':'123456'}
        self.__databases = {'primary':'dnd'}

    def __del__(self):
        self._close()
        del self.__connection
        del self.__serverInfo
        del self.__userInfo

    def _connect(self):
        try:
            self.__connection.connect(host=self.__serverInfo['host'], user=self.__userInfo['user'], password=self.__userInfo['password'], database=self.__databases['primary'])
            print(self.__connection.dbapi.ROWID)
        except:
            print('Connection failed.')

    def _close(self):
        #close connections and what not
        try:
            #self.__connection.Connect.
            print('Connection to ' + self.__serverInfo['host'] + ' closed.')
        except:
            print('Could not close connection. Was it even open?')

    def _createTable(self):
        name = ''
        variables = ''
        'CREATE TABLE ' + name + ' ' + variables

    def _addToTable(self, table, variable):
        pass

    def start(self):
        self._connect()
# end client

newClient = Client()
newClient.start()