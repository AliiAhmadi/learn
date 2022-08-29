import pygame
from pygame.locals import *
import sys
import random


class Text:
    """create a Text for GUI screen"""

    def __init__(
        self, WINDOW_WIDTH, WINDOW_HEIGHT, frame, location, value, color, size
    ):
        pygame.font.init()
        self.CreateWindow(WINDOW_WIDTH, WINDOW_HEIGHT)
        self.frames = frame
        self.location = location
        self.font = pygame.font.SysFont(None, size)
        self.text = None
        self.color = color
        self.clock()
        self.setValue(value)

    def CreateWindow(self, width, height):
        self.window = pygame.display.set_mode((width, height))

    def run(self):
        self.frameCounter = 0
        while True:
            for event in pygame.event.get():
                if event.type == pygame.QUIT:
                    pygame.quit()
                    sys.exit()
            self.frameCounter += 1
            self.setValue(str(self.frameCounter))
            self.window.fill((255, 255, 255))
            self.draw()
            pygame.display.update()
            self.clock.tick(self.frames)

    def clock(self):
        self.clock = pygame.time.Clock()

    def setValue(self, newValue):
        if self.text == newValue:
            return
        self.text = newValue
        self.textSurface = self.font.render(self.text, True, self.color)

    def draw(self):
        self.window.blit(self.textSurface, self.location)
