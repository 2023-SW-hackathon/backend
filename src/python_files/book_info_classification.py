import pandas as pd
import re

df1 = pd.read_excel('data\list5.xls', header=3)
df2 = pd.read_excel('data\category.xls')

# 청구기호 컬럼이 NaN인 행 제거
df1 = df1.dropna(subset=['청구기호'])

# 청구기호 컬럼의 각 값에 대해 첫 번째 '.' 혹은 '-'가 나오는 부분에서 한 번만 나누고, 그 결과의 첫 번째 부분을 추출
df1['청구기호'] = df1['청구기호'].apply(lambda x: re.split('\.|-', str(x), 1)[0])

# 청구기호 컬럼의 값들을 정수로 변환. 변환할 수 없는 값은 NaN으로 처리
df1['청구기호'] = pd.to_numeric(df1['청구기호'], errors='coerce')

df1['대분류'] = (df1['청구기호'] // 100) * 100
df1['소분류'] = df1['청구기호']

df = pd.merge(df1, df2, how='left', left_on='대분류', right_on='코드')
df = pd.merge(df, df2, how='left', left_on='소분류', right_on='코드')

df_final = df[['서명', '저자', '내용_x', '내용_y']]
df_final.to_excel('data\\result\\result5.xlsx', index=False)
