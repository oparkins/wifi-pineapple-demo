def sanitize(text):
    '''
    Get first 4 characters of string and replace rest with *s
    '''
    return text[0:4] + ("*" * len(text))
