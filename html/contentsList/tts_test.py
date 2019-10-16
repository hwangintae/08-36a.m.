# -*- encoding: utf-8 -*-

print('어디가 문젱')
try :
    import pyaudio
    import wave
    print('hi')

    po = pyaudio.PyAudio()
    '''
    for index in range(po.get_device_count()):

        desc = po.get_device_info_by_index(index)
    
        #if desc["name"] == "record":
    
        print("DEVICE: %s  INDEX:  %s  RATE:  %s " %  (desc["name"], index,  int(desc["defaultSampleRate"])))
        print(desc['name'],index, desc['maxInputChannels'])
        print('\n')
    
    #위에서 실행한 코드 결과로 현재 내 컴퓨터 안에 있는 사운드 관련 장치 목록들
   
    DEVICE: Microsoft 사운드 매퍼 - Input  INDEX:  0  RATE:  44100 
    Microsoft 사운드 매퍼 - Input 0 2
    
    DEVICE: 마이크(2- Realtek(R) Audio)  INDEX:  1  RATE:  44100 
    마이크(2- Realtek(R) Audio) 1 2
    
    DEVICE: Microsoft 사운드 매퍼 - Output  INDEX:  2  RATE:  44100 
    Microsoft 사운드 매퍼 - Output 2 0
    
    DEVICE: 스피커(2- Realtek(R) Audio)  INDEX:  3  RATE:  44100 
    스피커(2- Realtek(R) Audio) 3 0
    
    DEVICE: 주 사운드 캡처 드라이버  INDEX:  4  RATE:  44100 
    주 사운드 캡처 드라이버 4 2
    
    DEVICE: 마이크(2- Realtek(R) Audio)  INDEX:  5  RATE:  44100 
    마이크(2- Realtek(R) Audio) 5 2
    
    DEVICE: 주 사운드 드라이버  INDEX:  6  RATE:  44100 
    주 사운드 드라이버 6 0
    
    DEVICE: 스피커(2- Realtek(R) Audio)  INDEX:  7  RATE:  44100 
    스피커(2- Realtek(R) Audio) 7 0
    
    DEVICE: 스피커(2- Realtek(R) Audio)  INDEX:  8  RATE:  48000 
    스피커(2- Realtek(R) Audio) 8 0
    
    DEVICE: 마이크(2- Realtek(R) Audio)  INDEX:  9  RATE:  48000 
    마이크(2- Realtek(R) Audio) 9 2
    
    DEVICE: Speakers (Realtek HD Audio output)  INDEX:  10  RATE:  44100 
    Speakers (Realtek HD Audio output) 10 0
    
    DEVICE: 마이크 (Realtek HD Audio Mic input)  INDEX:  11  RATE:  44100 
    마이크 (Realtek HD Audio Mic input) 11 2
    
    DEVICE: 스테레오 믹스 (Realtek HD Audio Stereo input)  INDEX:  12  RATE:  48000 
    스테레오 믹스 (Realtek HD Audio Stereo input) 12 2
    
    결과 : 인덱스가 1인 마이크 장치를 이용하고 이에 해당하는 맥스채널이 2이므로 CHANNELS을 2로 설정 
    '''

    ### 여기서부터 코드 실행 시작

    FORMAT = pyaudio.paInt16
    CHANNELS = 2
    RATE = 16000
    CHUNK = 1024
    RECORD_SECONDS = 5

    audio = pyaudio.PyAudio()

    # start Recording
    stream = audio.open(format=FORMAT,
                        channels=CHANNELS,
                        rate=RATE,
                        input=True,
                        input_device_index=1,  # 마이크(2-Realtek(R) Audio)
                        frames_per_buffer=CHUNK)

    print("recording...")

    frames = []

    for i in range(0, int(RATE / CHUNK * RECORD_SECONDS)):
        data = stream.read(CHUNK)

        frames.append(data)

    print("finished recording")

    # stop Recording

    stream.stop_stream()
    stream.close()
    audio.terminate()


    waveFile = wave.open('test_wave.wav', 'wb')   #output 파일 #녹음 및 재생까지 확인 완료
    waveFile.setnchannels(CHANNELS)
    waveFile.setsampwidth(audio.get_sample_size(FORMAT))
    waveFile.setframerate(RATE)
    waveFile.writeframes(b''.join(frames))
    waveFile.close()

except ImportError as e :
    print(e)
    raise

