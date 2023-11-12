import pandas as pd
from sqlalchemy import create_engine
import pymysql
from urllib.parse import quote_plus

data = pd.read_excel("data\exercise.xls") 

password = quote_plus("nimda013584@")

engine = create_engine(f'mysql+pymysql://root:{password}@localhost:3306/recommend_info')

data.to_sql(name='exercise_info_table', con=engine, if_exists='replace', index=False)
