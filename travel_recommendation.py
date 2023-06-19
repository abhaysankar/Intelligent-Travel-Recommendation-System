
# coding: utf-8

# In[1]:


import pandas as pd





import mysql.connector as sql


# In[30]:


db_connection = sql.connect(host='localhost', database=' travel_management', user='root', password='')


# In[31]:


db_cursor = db_connection.cursor()


# In[32]:


db_cursor.execute('SELECT * FROM attraction')


# In[33]:


table_rows = db_cursor.fetchall()


# In[45]:


df = pd.DataFrame(table_rows)
df.columns = ['id', 'name', 'location', 'description', 'image']
df


# In[46]:


df = df[['id','description']]

#print(df.head())


# In[47]:


df.dropna(inplace=True)


# In[48]:


from sklearn.feature_extraction.text import TfidfVectorizer

tf = TfidfVectorizer(analyzer='word', ngram_range=(1, 3), min_df=0, stop_words='english')

matrix = tf.fit_transform(df['description'])


# In[49]:


from sklearn.metrics.pairwise import linear_kernel

cosine_similarities = linear_kernel(matrix,matrix)


# In[51]:


attraction_title = df['id']

indices = pd.Series(df.index, index=df['id'])

def attraction_recommend(title):

    idx = indices[title]

    sim_scores = list(enumerate(cosine_similarities[idx]))
    
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)

    sim_scores = sim_scores[1:31]

    attraction_indices = [i[0] for i in sim_scores]

    return attraction_title.iloc[attraction_indices].head(3)


# In[54]:
file=open("attraction_id.txt","r")
stud_id=file.read()
file.close()


recomm=attraction_recommend(int(stud_id))
print(list(recomm))
file=open("attraction_recomm.txt","w")
file.write(str(list(recomm)))
file.close()
#print(recomm[1])

