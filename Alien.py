import random
import pygame
from pygame.locals import *
import sys

COLOR = (0, 255, 0)
WIDTH = 1920
HEIGHT = 1080
FRAMES = 30
IMG_W = 533
IMG_H = 720
MAX_WIDTH = WIDTH - IMG_W
MAX_HEIGHT = HEIGHT - IMG_H
pygame.init()
window = pygame.display.set_mode((WIDTH, HEIGHT))
clock = pygame.time.Clock()
IMG = pygame.image.load("./pic.png")
IMG_X = random.randrange(MAX_WIDTH)
IMG_Y = random.randrange(MAX_HEIGHT)

IMG_RECT = pygame.Rect(IMG_X, IMG_Y, IMG_W, IMG_H)

while True:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()
        if event.type == pygame.MOUSEBUTTONUP:
            if IMG_RECT.collidepoint(event.pos):
                IMG_X = random.randrange(MAX_WIDTH)
                IMG_Y = random.randrange(MAX_HEIGHT)
                IMG_RECT = pygame.Rect(IMG_X, IMG_Y, IMG_W, IMG_H)
    window.fill(COLOR)
    window.blit(IMG, (IMG_X, IMG_Y))
    pygame.display.update()
    clock.tick(FRAMES)
