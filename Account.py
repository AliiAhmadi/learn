from Exption import *


class Account:
    def __init__(self, userName, balance, password):
        self.__userName = userName
        self.__balance = int(balance)
        self.__password = password

    def deposit(self, amountDeposit, password):
        if self.__password != password:
            print("Incorrect password ")
            return None
        if amountDeposit <= 0:
            print("deposit can not be negative")
            return None
        self.__balance += amountDeposit
        return self.__balance

    def withdraw(self, amountWithdraw, password):
        if self.__password != password:
            print("Incorrect password ")
            return None
        if amountWithdraw <= 0:
            print("withdraw can not be negative")
            return None
        if amountWithdraw > self.__balance:
            print("this amount of money is not available")
            return None
        self.__balance -= amountWithdraw
        return self.__balance

    def getBalance(self, password):
        if self.__password != password:
            print("Incorrect password ")
            return None
        return self.__balance

    def show(self, password):
        if self.__password != password:
            print("Incorrect password ")
            return None
        return {"username": self.__userName, "balance": self.__balance}
