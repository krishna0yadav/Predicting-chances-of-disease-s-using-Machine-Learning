import sklearn
import numpy as np
import pandas as pd
import pickle

dataset = pd.read_csv('medidata.csv')
x = dataset.iloc[:,0:1].values
y = dataset.iloc[:,-1].values

from sklearn.preprocessing import LabelEncoder
lb = LabelEncoder()
x[:,0]=lb.fit_transform(x[:,0])
y[:,-1]=lb.fit_transform(y[:,-1])

from sklearn.preprocessing import Imputer
imputer = Imputer(missing_values = 'NaN',strategy='mean',axis=0)
imputer = imputer.fit(x[:,])
x[:, ] = imputer.transform(x[:,])

from sklearn.model_selection import train_test_split
x_train,x_test,y_train,y_test = train_test_split(x,y,test_size=0.1,random_state = 0)
#print(x_test[1])

#fitting simple linear regression to the training set
from sklearn.linear_model import LinearRegression
regressor = LinearRegression()
regressor.fit(x_train,y_train)

pickle.dump(regressor,open('model.pkl','wb'))
model = pickle.load(open('model.pkl','rb'))

#predict the test set results
y_pred = regressor.predict([[int(Target), int(Weight)]])
from sklearn.metrics import accuracy_score
print(accuracy_score(y_test ,y_pred))
