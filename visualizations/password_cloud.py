# Celia M. Pacheco Oct 10 2019
'''
Create a wordcloud from passwords
'''

from wordcloud import WordCloud
import matplotlib.pyplot as plt
import pandas as pd
import sanitize

def main():
    '''
    Generate wordcloud for passwords
    '''
    df = pd.read_csv("keys.log")
    # Space separated string for wordcloud
    words = ' '
    # Loop though and get usernames only
    for val in df.Password:
        tmp = sanitize.sanitize(val) 
        print(tmp)
        words = words + str(tmp) + ' '
        print(words)
    wordcloud = WordCloud().generate(words)
    # Plot wordcloud
    plt.figure(figsize = (8, 8), facecolor = None)
    plt.imshow(wordcloud)
    plt.axis("off")
    plt.tight_layout(pad = 0)
    
    plt.show()

if __name__ == "__main__":
    main()



