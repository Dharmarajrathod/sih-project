import pandas as pd
from pandas_profiling import ProfileReport

df = pd.read_excel('D:\SIH\sampleData.xlsx')
profile = ProfileReport(df, title='dataExtract')
profile.to_file('sampleData_file.html')