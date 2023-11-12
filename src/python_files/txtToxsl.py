import pandas as pd
import re

with open('python_files\분류표.txt', 'r',  encoding='utf-8') as file:
    data = file.read()

# "숫자 " 패턴으로 분리
split_data = re.split(r'(\d+) ', data)

# 분리된 데이터를 2개씩 묶어서 처리
processed_data = [(split_data[i].strip(), split_data[i + 1].strip()) for i in range(1, len(split_data), 2)]

# 데이터를 DataFrame으로 변환
df = pd.DataFrame(processed_data, columns=['코드', '내용'])

# 엑셀 파일로 저장
df.to_excel('output.xlsx', index=False)