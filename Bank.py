from Account import *


class Bank:
    def __init__(self):
        self.AccountsDict = {}
        self.NextAccountNumber = 0

    def CreateAccount(self, name, startingAmount, password):
        account = Account(name, startingAmount, password)
        accountNumber = self.NextAccountNumber
        self.AccountsDict[accountNumber] = account
        self.NextAccountNumber += 1
        return accountNumber

    def openAccount(self):
        print("*** Open Account ***")
        username = input("what is the username for the new account ? ")
        startamount = int(input("what is the starting balance for this account ? "))
        password = input("what is the password this account ? ")
        newAccountNumber = self.CreateAccount(username, startamount, password)
        print(f"your Account Number is {newAccountNumber}\n")

    def closeAccount(self):
        print("*** Close Account ***")
        accountNumber = int(input("what is your account number ? "))
        accountPassword = input("what is your password ? ")
        Acc = self.AccountsDict[accountNumber]
        result = Acc.getBalance(accountPassword)
        if result is not None:
            print(f"your Balance : {result}")
            del self.AccountsDict[accountNumber]
            print("your account Closed")

    def balance(self):
        print("*** Get Balance ***")
        accountNumber = int(input("what is your account number ? "))
        accountPassword = input("what is your password ? ")
        Acc = self.AccountsDict[accountNumber]
        result = Acc.getBalance(accountPassword)
        if result is not None:
            print(f"your balance : {result}")

    def deposit(self):
        print("*** Deposit ***")
        Acc = self.__FindAccount()
        accountPassword = input("what is your password ? ")
        balance = Acc.deposit(int(input("what amount of deposit ? ")), accountPassword)
        if balance is not None:
            print(f"OK, your balance now : {balance}")

    def __FindAccount(self):
        accountNumber = int(input("what is your account number ? "))
        return self.AccountsDict[accountNumber]

    def show(self):
        print("*** Show ***")
        Acc = self.__FindAccount()
        accountPassword = input("what is your password ? ")
        data = Acc.show(accountPassword)
        if data is not None:
            print("username ->", data["username"])
            print("balance ->", data["balance"])

    def withdraw(self):
        print("*** Withdraw ***")
        Acc = self.__FindAccount()
        accountPassword = input("what is your password ? ")
        amount = int(input("what amount of withdraw ? "))
        balance = Acc.withdraw(amount, accountPassword)
        if balance is not None:
            print(f"Done ! \nwithdraw : {amount}\nbalance : {balance}")
