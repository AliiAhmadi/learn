import pygame
from pygame.locals import *
import sys

COLOR = (0, 0, 0)
WIDTH = 800
HEIGHT = 400
FRAMES_PER_SECOND = 60
pygame.init()
window = pygame.display.set_mode((WIDTH, HEIGHT))
clock = pygame.time.Clock()

while True:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()
    window.fill(COLOR)
    pygame.display.update()
    clock.tick(FRAMES_PER_SECOND)
