from Text import *

# COLOR = (0, 255, 0)
# WINDOW_WIDTH = 1920
# WINDOW_HEIGHT = 1080
# FRAMES = 60
# PIXELS = 3

# pygame.init()
# window = pygame.display.set_mode((WINDOW_WIDTH, WINDOW_HEIGHT))
# clock = pygame.time.Clock()
# IMG = pygame.image.load("./mypic.png")
# MUSIC = pygame.mixer.Sound("./sounds/sound.wav")
# IMG_rect = IMG.get_rect()

# MAX_WIDTH = WINDOW_WIDTH - IMG_rect.width
# MAX_HEIGHT = WINDOW_HEIGHT - IMG_rect.height
# IMG_rect.left = random.randrange(MAX_WIDTH)
# IMG_rect.top = random.randrange(MAX_HEIGHT)
# xSpeed = PIXELS
# ySpeed = PIXELS


# def play():
#     MUSIC.play()


# while True:
#     for event in pygame.event.get():
#         if event.type == pygame.QUIT:
#             pygame.quit()
#             sys.exit()
#     if (IMG_rect.left < 0) or (IMG_rect.right >= WINDOW_WIDTH):
#         xSpeed = -xSpeed
#         play()
#     if (IMG_rect.top < 0) or (IMG_rect.bottom >= WINDOW_HEIGHT):
#         ySpeed = -ySpeed
#         play()
#     IMG_rect.left = IMG_rect.left + xSpeed
#     IMG_rect.top = IMG_rect.top + ySpeed
#     window.fill(COLOR)
#     window.blit(IMG, IMG_rect)
#     pygame.display.update()
#     clock.tick(FRAMES)

myText = Text(1920, 1080, 60, (200, 200), "0", (255, 0, 0), 60)
myText.run()
