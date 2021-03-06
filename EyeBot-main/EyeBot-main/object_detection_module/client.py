# import the necessary packages
from imutils.video import VideoStream
import imagezmq
import socket
import time
import signal
from contextlib import contextmanager

@contextmanager
def timeout(time):
    # register a function to raise a TimeoutError on the signal
    signal.signal(signal.SIGALRM, raise_timeout)
    # schedule the signal to be sent after 'time'
    signal.alarm(time)

    try:
        yield
    finally:
        # unregister the signal so it wont be triggered if the timtout is not reached
        signal.signal(signal.SIGALRM, signal.SIG_IGN)


def raise_timeout(signum, frame):
    raise TimeoutError


# initialize the ImageSender object with the socket address of the
# server
sender = imagezmq.ImageSender(connect_to="tcp://192.168.43.10:5566")

# get the host name, initialize the video stream, and allow the
# camera sensor to warmup
rpiName = socket.gethostname()
print(rpiName)

#vs = VideoStream(usePiCamera=True, framerate=20, resolution=(640, 480)).start()

print('Starting.....')
vs = VideoStream(src=0, framerate=20, resolution=(640, 480)).start()

time.sleep(2.0)
timestamp_of_last_socket_refresh = time.time()

print('Started')
while True:
    # read the frame from the camera and send it to the server
    frame = vs.read()
    try:
        with timeout(10):
            try:
                hub_reply = sender.send_image(rpiName, frame)
            except Exception as exc:
                print("send_image exception")
                print(f"Exception msg: {exc}")
                time.sleep(6)  # something happened, force a timeout
    except TimeoutError:
        print("Sending timeout.. reconnect to server")
        sender = imagezmq.ImageSender(connect_to="tcp://{}:5555")
