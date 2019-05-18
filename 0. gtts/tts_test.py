from gtts import gTTS
import os
tts = gTTS('안녕하세요 구글 클라우드 텍스트 투 스피치 입니다.', lang = 'ko')
tts.save("save.mp3")
os.system("save.mp3")