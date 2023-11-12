import pandas as pd
from sqlalchemy import create_engine
from urllib.parse import quote_plus

df = pd.read_excel('data\\result\\result5.xlsx', engine='openpyxl')

df['literature_OX'] = df['내용_x'].apply(lambda x: 1 if x == '문학' else 0)

df = df[['서명', '저자', 'literature_OX', '내용_x', '내용_y']]
df.columns = ['title', 'author', 'literature_OX', 'tag1', 'tag2']

password = quote_plus("nimda013584@")

engine = create_engine(f'mysql+pymysql://root:{password}@localhost:3306/recommend_info')

df.to_sql('Book_info_table', con=engine, if_exists='append', index=False)
