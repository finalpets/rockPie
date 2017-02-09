# -*- coding: utf-8 -*-
#create by PETS 12/10/2015

# This Python file uses the following encoding: utf-8
import os, sys, re, commands, subprocess, multiprocessing
import time, ctypes, shutil
from os import rename, listdir
import collections
import string
import unicodedata
reload(sys)
sys.setdefaultencoding("utf-8")
import csv
class WTCW: # WindowsTerminalColourWrapper
    WRAPPERS = ['{', '}']
    
   # Constants from the Windows API: DO NOT CHANGE
    STD_INPUT_HANDLE  = -10;
    STD_OUTPUT_HANDLE = -11;
    STD_ERROR_HANDLE  = -12
    FG_BLUE = 0x01; FG_GREEN= 0x02; FG_RED  = 0x04; FG_INTENSITY = 0x08; FG_CYAN = 0x0B; FG_YELLOW = 0x0E;
    BG_BLUE = 0x10; BG_GREEN= 0x20; BG_RED  = 0x40; BG_INTENSITY = 0x80;
    colors = {'r': FG_RED, 'g':FG_GREEN, 'b':FG_BLUE, 'R':BG_RED, 'G':BG_GREEN, 'B':BG_BLUE, 'i':FG_INTENSITY, 'c':FG_CYAN, 'y':FG_YELLOW, 'I':BG_INTENSITY, 'w':FG_RED|FG_GREEN|FG_BLUE}
    
    def _get_csbi_attributes(self):
        # Based on IPython's winconsole.py, written by Alexander Belchenko
        import struct
        csbi = ctypes.create_string_buffer(22)
        res = ctypes.windll.kernel32.GetConsoleScreenBufferInfo(self.handle, csbi)
        assert res
        (bufx, bufy, curx, cury, wattr,
        left, top, right, bottom, maxx, maxy) = struct.unpack("hhhhHhhhhhh", csbi.raw)
        return wattr
    def __init__(self, stream, defColor = ''):
        self.stream = stream
        self.defColor = self._parseColor(defColor)
        self.handle = ctypes.windll.kernel32.GetStdHandle(self.STD_OUTPUT_HANDLE)
        self.reset = self._parseColor('rgb') # self._get_csbi_attributes()
    def __del__(self): self.resetColor()
    def __getattr__(self, attr): return getattr(self.stream, attr)
    def _parseColor(self, str): 
        colval = 0
        for c in str:
            if c.lower() == 'x': 
                self.resetColor()
                break
            colval |= self.colors[c]
        return colval
    def write(self, data):
        if self.defColor != 0: 
            self.setColour(defColor)
        parts = data.split(self.WRAPPERS[0])
        for part in parts:
            f = part.find(self.WRAPPERS[1])
            if f != -1:
                self.setColour(self._parseColor(part[0:f]))
                self.stream.write(part[f + len(self.WRAPPERS[1]):])
            else:
                self.stream.write(part)
            self.stream.flush()
        self.resetColor()
    def writeln(self, data): self.write(data + '\n')
    def setColour(self, color): ctypes.windll.kernel32.SetConsoleTextAttribute(self.handle, color)
    def resetColor(self): ctypes.windll.kernel32.SetConsoleTextAttribute(self.handle, self.reset)

# something needs to define at top-level
def add(number1,number2):
	print("Hello world ")
	x =number1 + number2
	print(x)

def cmd_dir():
	cmd = 'cls'
	os.system(cmd)
	#(status, output) = commands.getstatusoutput(cmd)
	#if status:
	#	print 'there was an error:'
	#	print output
	#	sys.exit(1)
	#print output
	
def cocos_console(mode):
	try:
		retcode = subprocess.call("cocos compile -p android -m "+ mode, shell=True)
		if retcode < 0:
			print >>sys.stderr, "Child was terminated by signal", -retcode
		else:
			print >>sys.stderr, "Child returned", retcode
			if retcode == 0:
				subprocess.call("set PYTHON_ERROR=0", shell=True)
			else:
				subprocess.call("set PYTHON_ERROR=1", shell=True)
				exit(1)
	except OSError as e:
		print >>sys.stderr, "Execution failed:", e
	#try:
	#	cmd = "cocos compile -p android -m "+ mode
	#	os.system(cmd)
	#except Exception as e:
	#	console = WTCW(sys.stdout)
	#	console.writeln("\n\n{r}COMPILE FAILED...\n")
def remove_accents(input_str):
    nkfd_form = unicodedata.normalize('NFKD', input_str)
    return u"".join([c for c in nkfd_form if not unicodedata.combining(c)])
	

def get_filepaths(directory):
	"""
	This function will generate the file names in a directory 
	tree by walking the tree either top-down or bottom-up. For each 
	directory in the tree rooted at directory top (including top itself), 
	it yields a 3-tuple (dirpath, dirnames, filenames).
	"""
	file_paths = []  # List which will store all of the full filepaths.
	console = WTCW(sys.stdout)
    # Walk the tree.
	for root, directories, files in os.walk(unicode(directory)):
		for filename in files:
			# Join the two strings in order to form the full filepath.
			#console.writeln("{y} Orinal File Name ...\n"+os.path.join(directory,filename))
			if filename.endswith(".mp3"):
				print filename
				#print os.path.join(directory,filename)
				#str	= root+"\\"+remove_accents(filename)
				str = os.path.join(root, remove_accents(filename))
				print str
				try:
					os.rename(os.path.join(root,filename),u""+str)
				except Exception as e:
					print e
			filepath = os.path.join(root, filename)			
			file_paths.append(filepath)  # Add it to the list.

	return file_paths  # Self-explanatory.
	
def main():
	start = time.clock()
	console = WTCW(sys.stdout) 
	console.writeln("\n\n{y}Rename Files ...\n")	
	badprefix = "cheese_"
	fnames = os.listdir(unicode('./parsed'))	
	directory = os.getcwd()+"\\..\music"
	console.writeln("\n\n{y}Directory ...\n"+directory)	
	
#	for fname in fnames:    		
		#console.writeln("\n\n{y} Orinal File Name ...\n"+os.path.join(directory,fname) )				
		#console.writeln("\n\n{y}New File name ...\n"+remove_accents(fname))	
#		str	= directory+"\\"+"parsed"+"\\"+remove_accents(fname)
		#console.writeln("\n\n{y}New File name ...\n"+str)	
#		try:
#			os.rename(os.path.join(directory+"\\parsed\\",fname),u""+str)
#		except Exception as e:
#			print e
		
	
	#print remove_accents("Montréal")
	
	

	full_file_paths = get_filepaths(directory)	
	#for f in full_file_paths:
	#	if f.endswith(".mp3"):
	#		console.writeln("\n\n{y} Orinal File Name ...\n"+f)
	end = time.clock()
	console.writeln('{gi}In %s.' % (time.strftime('%H hour(s) %M minute(s) %S second(s).\n', time.gmtime(end-start))))
if __name__ == '__main__':	
	main()


