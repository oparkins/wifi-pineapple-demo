# Celia M. Pacheco Oct 10 2019
'''
Create a wordcloud from usernames
'''

from wordcloud import WordCloud
import matplotlib.pyplot as plt
import pandas as pd
import sanitize

def main():
    '''
    Generate wordcloud for usernames
    '''
    df = pd.read_csv("keys.log")
    # Space separated string for wordcloud
    words = ' '
    # Loop though and get usernames only
    for val in df.Username:
        tmp = sanitize.sanitize(val) 
        words = words + tmp + ' '
    wordcloud = WordCloud().generate(words) 
    # Plot wordcloud
    plt.figure(figsize = (8, 8), facecolor = None)
    plt.imshow(wordcloud)
    plt.axis("off")
    plt.tight_layout(pad = 0)
    
    plt.show()

if __name__ == "__main__":
    main()



