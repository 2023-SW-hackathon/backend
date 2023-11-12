import pandas as pd
from sqlalchemy import create_engine
from urllib.parse import quote_plus


data = pd.read_excel('data\\certificate.xls')

password = quote_plus("nimda013584@")

engine = create_engine(f'mysql+pymysql://root:{password}@localhost:3306/recommend_info')

data.to_sql(name='certificate_table', con=engine, if_exists='append', index=False)
