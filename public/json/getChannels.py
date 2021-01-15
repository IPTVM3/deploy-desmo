import json
import re
 

def after(value, a):
    # Find and validate first part.
    pos_a = value.rfind(a)
    if pos_a == -1: return ""
    # Returns chars after the found string.
    adjusted_pos_a = pos_a + len(a)
    if adjusted_pos_a >= len(value): return ""
    return value[adjusted_pos_a:]


def between(value, a, b):
    # Find and validate before-part.
    pos_a = value.find(a)
    if pos_a == -1: return ""
    # Find and validate after part.
    pos_b = value.rfind(b)
    if pos_b == -1: return ""
    # Return middle part.
    adjusted_pos_a = pos_a + len(a)
    if adjusted_pos_a >= pos_b: return ""
    return value[adjusted_pos_a:pos_b]


header = ""
all_ = ""
def set_header(code):
    html = '<div><input type="radio" name="accs" id="heading'+code.rstrip().replace(" ", "").replace("|", "_")+'" checked><label for="heading'+code.rstrip().replace(" ", "").replace("|", "_")+'"><i class="fa fa-address-card"></i>'+code+'</label>'
    return html


def set_body(channels): 
    html = ' <div class="accs-body"><ul>'  
    for channel in channels:
        html += '<li>'+channel+'</li>'
    html += '</ul></div></div>'  
    return html


f = open(r"G:\getAllChannels\channels.txt", encoding="utf8")
content = f.read().splitlines()
all_codes= []
all_channels = []
for _line in content:
    general_code = between(_line,"-------------","--------------------------") 
    if(general_code.find("|") != -1):
        all_codes.append(general_code.rstrip())
    
list_of_channels = []
all_ =""
for line in content: 
    channel = after(line,"|"+between(line,"|","|") +"|") 
    if(channel.find("---") != -1): 
        categorie = between(line,"--|"+between(line,"|","|")+"|","--------------------------") 
    else: 
        code = between(line,"|","|")
        all_ += '<li class="list-group-item d-flex justify-content-between align-items-center">'+channel.rstrip()+'<span class="badge badge-primary badge-pill">'+code+'</span></li>'
                
    
    
 

 
out = "channels_.txt"
with open(out, 'w') as outfile:
   json.dump(all_, outfile)


