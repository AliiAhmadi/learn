import math
from random import random
import pygame
from pygame.locals import *
import sys

COLOR = (0, 255, 0)
WIDTH = 1920
HEIGHT = 1080
SIZE = (WIDTH, HEIGHT)
FRAMES_PER_SECOND = 30
pygame.init()  # start pygame
window = pygame.display.set_mode(SIZE)  # create a window Object with this size
clock = pygame.time.Clock()  # create a Clock Object
numberOne = 0

while True:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()
    if numberOne == 50:
        COLOR = (
            math.floor(random() * 255),
            math.floor(random() * 255),
            math.floor(random() * 255),
        )

        numberOne = 0
    numberOne += 1
    window.fill(COLOR)
    pygame.display.update()

    clock.tick(FRAMES_PER_SECOND)
